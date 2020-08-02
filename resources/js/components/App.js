import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import { BrowserRouter, Route, Switch } from 'react-router-dom'
import Header from './Header'
import ArtikelIndex from './ArtikelIndex'
import ArtikelCreate from './ArtikelCreate'
import ArtikelShow from './ArtikelShow'
import ArtikelEdit from './ArtikelEdit'

class App extends Component{
    render(){
        return (
            <BrowserRouter>
                <div>
                    <Header />
                    <Switch>
                        <Route exact path='/' component={ArtikelIndex}/>
                        <Route exact path='/artikel/create' component={ArtikelCreate}/>
                        <Route exact path='/artikel/:id' component={ArtikelShow}/>
                        <Route exact path='/artikel/edit/:id' component={ArtikelEdit}/>
                    </Switch>
                </div>
            </BrowserRouter>
        )
    }
}
ReactDOM.render(<App />, document.getElementById('app'))