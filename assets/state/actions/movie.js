import { ActionTypes } from "../contants/actionTypes";

export const setMovies = (movies) => {
    return {
        type: ActionTypes.SET_PRODUCTS,
        payload: movies
    };
};

export const selectedMovie = (movie) => {
    return {
        type: ActionTypes.SELECTED_PRODUCTS,
        payload: movie
    }
}