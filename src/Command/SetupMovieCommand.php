<?php

namespace App\Command;

use App\Entity\Movie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use App\Service\MovieService;


#[AsCommand(
    name: 'app:setup-movie',
    description: 'Movie create data',
)]
class SetupMovieCommand extends Command
{
    private $movieService;

    public function __construct(MovieService $movieService, EntityManagerInterface $em)
    {
        $this->movieService = $movieService;
        $this->em = $em;

        parent::__construct();
    }

    protected function configure(): void
    {
        //
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io          = new SymfonyStyle($input, $output);
        $movies      = $this->movieService->setMovieData();
        $moviesCount = count($movies);

        $io->title("Aktarım Başladı");
        $io->progressStart($moviesCount);

        foreach ($movies as $movie){
            $movieData = (new Movie())
                        ->setScore($movie->score)
                        ->setShowId($movie->id)
                        ->setShowUrl($movie->url)
                        ->setShowName($movie->name)
                        ->setShowType($movie->type)
                        ->setShowLanguage($movie->language)
                        ->setShowRuntime($movie->runtime)
                        ->setShowOfficalSite($movie->officialsite)
                        ->setShowRatingAverage($movie->rating)
                        ->setShowNetworkName($movie->network)
                        ->setShowImageMedium($movie->image_medium)
                        ->setShowImageOriginal($movie->image_original)
                        ->setShowSummary($movie->summary)
            ;
            $this->em->persist($movieData);
            $io->progressAdvance();
        }

        $this->em->flush();
        $io->progressFinish();
        $io->title("Aktarım Bitti");

        $io->success(sprintf('%d Movie data kayıt edildi', $moviesCount));

        return Command::SUCCESS;
    }
}
