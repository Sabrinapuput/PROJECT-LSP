import { usePage } from "@inertiajs/inertia-react";
import React from "react";
import "../../css/style.css";
import Layout from "../Pages/Main/Layout.jsx";

const Home = () => {
    // const { user} = usePage().praps.auth;
    // console.log("USER", user);
    return(
        <>
        <Layout>
            <center>
                <b>
                    <br />
                    SELAMAT DATANG USER DENGAN AKSES MASUK{" "}
                    {/* {user.kode_admin ?? user.niss ?? user.nip} */}
                </b>
            </center>
        </Layout>
        </>
    );
};
export default Home;