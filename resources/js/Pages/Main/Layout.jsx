import React from "react";
import "../../../css/style.css";
import headerImage from "../../../src/images/header.jpg";
import {Link, usePage} from "@inertiajs/inertia-react";
import { Inertia } from "@inertiajs/inertia";

export default function Layout({ children }) {
   //const { user} = usePage().props.auth
    return (
        <>
        <div className="header">
          <img src={headerImage} alt="" />
        </div>
        <div className="menu">
          <b>
            <a href="/home">HOME</a>
            {/* {user.role == 'admin' ? ( */}
                <>
                <a href="/guru/index">GURU</a>
                <a href="/jurusan/index">JURUSAN</a>
                <a href="/Kelas/index">KELAS</a>
                <a href="/Siswa/index">SISWA</a>
                <a href="/Mapel/index">MAPEL</a>
                <a href="/Mengajar/index">MENGAJAR</a>
                </>
            {/* ):( */}
             <a href="/nilai/index">NILAI</a>
            {/* )} */}
            <a href="/logout">LOGOUT</a>
          </b>
        </div>

        <div className="content">{children}</div>

        <div className="footer">
        <b>
            <p className="nar">2023- UJIKOM & LSP</p>
        </b>
</div>

        </>
    );
}