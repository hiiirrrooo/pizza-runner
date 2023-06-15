import React from 'react'
import { Routes, Route } from "react-router-dom"

import IndexPage from '../Pages/Index.jsx'
import OrderPage from '../Pages/Order.jsx'
import SignInPage from '../Pages/SignIn.jsx'
import NotFound from '../Pages/NotFound.jsx'


const Router = () => {
    return (
        <div>
            <Routes>
                <Route path="/" element={ <IndexPage /> } />
                <Route path="/order" element={ <OrderPage />} />
                <Route path="/signin" element={ <SignInPage />} />
                <Route path="/*" element={ <NotFound /> } />
            </Routes>
        </div>
    )
}

export default Router