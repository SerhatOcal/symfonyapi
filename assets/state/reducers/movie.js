import { ActionTypes } from '../contants/actionTypes';

const initialState = {
    movies: [],
};

export const movieReducer = (state = initialState, {type, payload}) => {
    switch (type){
        case ActionTypes.SET_PRODUCTS:
            return {...state, movies: payload};
        default:
            return state;
    }
};

export const selectedMovieReducer = (state = {}, {type, payload}) => {
    switch (type){
        case ActionTypes.SELECTED_PRODUCTS:
            return {...state, ...payload};
        default:
            return state;
    }
};