/**
 * Created by hongguang xie on 2017/1/18.
 */

// modules/NavLink.js
import React from 'react'
import { Link } from 'react-router'
export default React.createClass({
    render() {
        return <Link {...this.props} activeClassName="active"/>
    }
})
