import React, {useState} from 'react';
import { useSelector } from "react-redux";
import { Link } from "react-router-dom";

const Movie = () => {
    const movies = useSelector((state) => state.movies.movies);
    const [searchTerm, setSearchTerm] = useState('');

    return (
        <div className="row">
            <div className="col-12">
                <h2 className="text-center mb-2 pt-2">Filmler</h2>
                <h6 className="text-center">Aşağıki filmlerin üzerine tıklayarak detayını görüntüleyebilir ve arama kısmından istediğiniz filmi arayabilirsiniz.</h6>
                <div className="card-body row no-gutters align-items-center">
                    <div className="col-auto">
                        <i className="fas fa-search h4 text-body"></i>
                    </div>
                    <div className="col">
                        <input
                            className="form-control form-control-lg form-control-borderless"
                            type="search"
                            placeholder="Aramak istediğiniz dilm adınız yazınız"
                            onChange={event => {setSearchTerm(event.target.value)}}
                        />
                    </div>
                    <div className="col-auto">
                        <button className="btn btn-lg btn-success">ARA</button>
                    </div>
                </div>
            </div>
            {movies.filter((movie) => {
                if(searchTerm == ""){

                    return movie;
                } else if (movie.show_name.includes(searchTerm)){
                    return movie;
                }
            }).map((movie) => {
                const {id, show_image_medium, show_name, show_network_name, show_rating_average} = movie;
                return (
                        <div className="col-3 mb-3" key={id}>
                                <Link to={`/film/${id}`}>
                                    <div className="card p-3">
                                        <div className="col" align="center">
                                            <img className="img-thumbnail mt-2" src={show_image_medium} alt={show_name}/>
                                        </div>
                                        <h5 className="card-title mt-2">Adı: {show_name}</h5>
                                        <h5 className="card-title">Kanal: {show_network_name}</h5>
                                        <span className="btn btn-success p-1">Rating {show_rating_average}</span>
                                    </div>
                                </Link>
                        </div>
                );
            })}
        </div>

    );
}

export default Movie;
