import '../css/app.css'

import React from  'react'
import ReactDOM from 'react-dom/client';        
import { BrowserRouter } from "react-router-dom"

import Main from './Pages/Main';

ReactDOM.createRoot(document.getElementById('app')).render(     
    <BrowserRouter>
        <Main />
    </BrowserRouter>
);