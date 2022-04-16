import React from 'react';
import ReactDOM from 'react-dom';
import App from './App.js';
import Login from './Login.js';

import Register from './Register.js';

import Click from './Click.js';
import Home from './Home.js';

import {BrowserRouter as Router,Switch,Route} from 'react-router-dom';

ReactDOM.render(<React.StrictMode>
    <Router>
        <Switch>

            <Route exact path="/Login">
                <Login/>
            </Route>
            <Route exact path="/Register">
                <Register/>
            </Route>
        </Switch> 
    </Router>
    
    </React.StrictMode>,document.getElementById('root'));

//ReactDOM.render(<React.StrictMode><Login /></React.StrictMode>,document.getElementById('root'));