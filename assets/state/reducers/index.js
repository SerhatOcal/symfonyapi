import { combineReducers } from "redux";
import { movieReducer, selectedMovieReducer} from "./movie";

const reducers = combineReducers({
    movies: movieReducer,
    movie: selectedMovieReducer,
})

export default reducers;