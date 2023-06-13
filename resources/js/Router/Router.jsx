import React from 'react'
import { Routes, Route } from "react-router-dom"

import IndexPage from '../Pages/Index.jsx'
import OrderPage from '../Pages/Order.jsx'
import SignInPage from '../Pages/SignIn.jsx'
import DashboardPage from '../Pages/Dashboard.jsx'
import NotFound from '../Pages/NotFound.jsx'


const Router = () => {
    return (
        <div>
            <Routes>
                <Route path="/" element={ <IndexPage /> } />
                <Route path="/pages/order" element={ <OrderPage />} />
                <Route path="/pages/signin" element={ <SignInPage />} />
                <Route path="/pages/dashboard" element={ <DashboardPage /> }/>
                <Route path="/*" element={ <NotFound /> } />
            </Routes>
        </div>
    )
}

export default Router