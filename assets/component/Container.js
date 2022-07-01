import React from 'react';
import { BrowserRouter as Router, Switch, Route} from "react-router-dom";
import MovieList from "./MovieList";
import MovieDetail from "./MovieDetail";

function Container() {
        return (
            <div className="App">
                <Router>
                    <Switch>
                        <Route path="/film" exact component={MovieList} />
                        <Route path="/film/:movieId" exact component={MovieDetail} />
                        <Route>404 Not Found!</Route>
                    </Switch>
                </Router>
            </div>
        );
}

export default Container;