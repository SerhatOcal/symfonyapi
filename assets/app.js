import React, {Component} from 'react';
import ReactDOM from "react-dom/";
import Container from "./component/Container";
import store from "./state/store";
import { Provider } from "react-redux";

class App extends Component {

    render() {
        return (
            <Provider store={store}>
                <Container />
            </Provider>
        );
    }
}

ReactDOM.render(<App/>, document.getElementById('root'));
