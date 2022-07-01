import React, { useEffect } from 'react';
import axios from "axios";
import { useDispatch, useSelector } from "react-redux";
import { setMovies } from "../state/actions/movie";
import Movie from "./Movie";

const MovieList = () => {
		const movies = useSelector((state) => state);
		const dispatch = useDispatch();

		const getMovies = async () => {
			const response = await axios
				.get("http://symfonyapi.test/v1/api/movies",{headers: {'x-api-token': '91816881b0c3cc573148e4c0d76501e42117c3ee8ca9fe0525bba164888994bee89260688eeee20a7e8e47c9f3e0d505c471a9c38da4d390175cd7940a'}
				}).catch((err) => {
					console.log("Err", err);
				});
			dispatch(setMovies(response.data));
		}

		useEffect(() => {
			getMovies();
		},[])

        return (
            <div className="container mt-3">
				<div className="row">
					<Movie/>
				</div>
            </div>
	);
}

export default MovieList;