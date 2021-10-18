/* eslint-disable @next/next/no-page-custom-font */
/* eslint-disable @next/next/no-img-element */
/* eslint-disable react-hooks/rules-of-hooks */
import type { NextPage } from 'next'
import Head from 'next/head'
import Image from 'next/image'
import React, { useState,useEffect,useRef } from 'react'
import Navbar from '../../components/navbar/navbar'
import style from '../home/style.module.css'

import { Swiper, SwiperSlide } from "swiper/react";
// Import Swiper styles
import "swiper/css";
import "swiper/css/navigation"

// import Swiper core and required modules
import SwiperCore, {
  Navigation
} from 'swiper';

// install Swiper modules
SwiperCore.use([Navigation]);

const Home: NextPage = () => {
	const [shownav, setShowNav] = useState(false)
	const onClick = () => setShowNav(!shownav)
	return (
		<>
			<Head>
				<link
					rel="apple-touch-icon"
					sizes="180x180"
					href="/apple-touch-icon.png"
				/>
				<link
					rel="icon"
					type="image/png"
					sizes="32x32"
					href="/favicon-32x32.png"
				/>
				<link
					rel="icon"
					type="image/png"
					sizes="16x16"
					href="/favicon-16x16.png"
				/>
				<link rel="manifest" href="/site.webmanifest" />
				<link
					rel="mask-icon"
					href="/safari-pinned-tab.svg"
					color="#ff0000"
				/>
				<meta name="msapplication-TileColor" content="#3e3e3e" />
				<meta name="theme-color" content="#ffffff" />
				<title>Indesfer</title>
				<link
					rel="stylesheet"
					href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
					integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
				/>
				<link
					href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
					rel="stylesheet"
				/>
				<link
					href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
					rel="stylesheet"
				/>
			</Head>
			<body className={style.body}>
				{/*NAVBAR*/}
				<nav className={style.nav}>
					{shownav ? 
					<Navbar
					onClick={onClick}
					/> :<>
						<div className={style.center}>
							<button onClick={onClick}>
								<img src="arrow.png" alt="Arrow" height="30" />
							</button>
							<img src="logo.webp" alt="Indesfer Logo" />
						</div>
						</>
					}
				</nav>
				<main>
					<Swiper navigation={true} className={style.swiper}>
						<SwiperSlide>
							<img
								className={style.imagemFundo}
								src="/001_112338.webp"
								alt="Picture of the author"
							/>
						</SwiperSlide>
						<SwiperSlide>
							<img
								className={style.imagemFundo}
								src="/001_112338.webp"
								alt="Picture of the author"
							/>
						</SwiperSlide>
						<SwiperSlide>
							<img
								className={style.imagemFundo}
								src="/001_112338.webp"
								alt="Picture of the author"
							/>
						</SwiperSlide>
						<SwiperSlide>
							<img
								className={style.imagemFundo}
								src="/001_112338.webp"
								alt="Picture of the author"
							/>
						</SwiperSlide>
						<SwiperSlide>
							<img
								className={style.imagemFundo}
								src="/001_112338.webp"
								alt="Picture of the author"
							/>
						</SwiperSlide>
						<SwiperSlide>
							<img
								className={style.imagemFundo}
								src="/001_112338.webp"
								alt="Picture of the author"
							/>
						</SwiperSlide>
						<SwiperSlide>
							<img
								className={style.imagemFundo}
								src="/001_112338.webp"
								alt="Picture of the author"
							/>
						</SwiperSlide>
						<SwiperSlide>
							<img
								className={style.imagemFundo}
								src="/001_112338.webp"
								alt="Picture of the author"
							/>
						</SwiperSlide>
						<SwiperSlide>
							<img
								className={style.imagemFundo}
								src="/001_112338.webp"
								alt="Picture of the author"
							/>
						</SwiperSlide>
					</Swiper>
				</main>
			</body>
		</>
	)
}

export default Home
