import React, {useEffect} from 'react';
import {useParams} from "react-router-dom";
import axios from "axios"
import {useDispatch, useSelector} from "react-redux";
import {selectedMovie} from "../state/actions/movie"

const MovieDeatail = () => {
    const movie = useSelector((state) => state.movie);
    const {
            id,
            score,
            show_id,
            show_image_original,
            show_language,
            show_name,
            show_network_name,
            show_offical_site,
            show_rating_average,
            show_runtime,
            show_summary,
            show_type,
            show_url
        } = movie;

    const { movieId } = useParams();

    const dispatch = useDispatch();

    const getMovie = async () => {
        const response = await axios
			.get(`http://symfonyapi.test/v1/api/movies/${movieId}`,{headers: {'x-api-token': '91816881b0c3cc573148e4c0d76501e42117c3ee8ca9fe0525bba164888994bee89260688eeee20a7e8e47c9f3e0d505c471a9c38da4d390175cd7940a'}
			}).catch((err) => {
                console.log("Err", err);
            });
        dispatch(selectedMovie(response.data));
    }
    useEffect(() => {
        if(movieId && movieId !== "") getMovie();
    },[movieId])

    return (
		<div className="container mt-3 mb-5">
            <h2 className="text-center mb-5 pt-5">Film Detayı</h2>
			<div className="row d-flex justify-content-center">
                <div className="col-md-10">
                    <div className="cart">
                        <div className="row product">
                            <div className="col-md-6">
                                <div className="images p-3">
                                    <div className="text-center p-4">
                                        <img src={show_image_original} alt={show_name} width="400" height="450"/>
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-6">
                                <div className="product pt-3">
                                    <div className="justify-content-between align-items-center">
                                        <div className="mt-4 mb-3">
                                            <h5 className="text-uppercase text-muted brand">Score : {score}</h5>
                                            <h5 className="text-uppercase">{show_name}</h5>
                                            <div className="flex-row align-items-center">
                                                <h6 className="act-price">Rating</h6>
                                                <h6 className="act-price">{show_rating_average}</h6>
                                                <h6 className="review-no mt-2">Dil : {show_language}</h6>
                                                <h6 className="review-no">Süre : {show_runtime}</h6>
                                                <h6 className="review-no">Kategori : {show_type}</h6>
                                                <h6 className="review-no">Kanal : {show_network_name}</h6>
                                                <h6 className="review-no">Orjinal Site : {show_offical_site}</h6>
                                                <h6 className="review-no">Web Adres : {show_url}</h6>

                                            </div>
                                        </div>
                                        <div className="flex-row align-items-center"> <span className="act-price p-0">Özet </span>
                                            <div className="ml-2"> <span className="p-0">{show_summary}</span> </div>
                                        </div>
                                    </div>
                                    <a href={show_url} className="btn btn-success mt-3 mb-3" target="_blank">Orjinal Site için tıklayınız</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	);

};

export default MovieDeatail;
