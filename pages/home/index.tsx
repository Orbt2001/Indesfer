/* eslint-disable @next/next/no-page-custom-font */
/* eslint-disable @next/next/no-img-element */
/* eslint-disable react-hooks/rules-of-hooks */
import type { NextPage } from 'next'
import Head from 'next/head'
import Image from 'next/image'
import React, { useState, useEffect, useRef } from 'react'
import Navbar from '../../components/navbar/navbar'
import style from '../home/style.module.css'

// Import Swiper React components
import { Swiper, SwiperSlide } from 'swiper/react'

// Import Swiper styles
import 'swiper/css'
import 'swiper/css/pagination'
import 'swiper/css/navigation'

// import Swiper core and required modules
import SwiperCore, { Autoplay, Pagination, Navigation } from 'swiper'

// install Swiper modules
SwiperCore.use([Autoplay, Pagination, Navigation])

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
					{shownav ? (
						<Navbar onClick={onClick} />
					) : (
						<>
							<div className={style.center}>
								<button onClick={onClick}>
									<img
										src="arrow.png"
										alt="Arrow"
										height="30"
									/>
								</button>
								<img src="logo.webp" alt="Indesfer Logo" />
							</div>
						</>
					)}
				</nav>
				<main>
					<Swiper
						spaceBetween={30}
						centeredSlides={true}
						autoplay={{
							delay: 10000,
							disableOnInteraction: false,
						}}
						pagination={{
							clickable: true,
						}}
						navigation={true}
						className="mySwiper"
					>
						<SwiperSlide>
							<img
								className={style.imagemFundo}
								src="/001_112338.webp"
								alt="Picture of the author"
							/>
							<div className={style.txtslide}>
								<h2>VIGAS ENRIJECIDAS</h2>
								<p>
									As construções feitas com perfil U
									enrijecido, em comparação a outros
									materiais, oferecem redução de peso de até
									1/3 das estruturas
								</p>
							</div>
						</SwiperSlide>
						<SwiperSlide>
							<img
								className={style.imagemFundo}
								src="/002_112425.webp"
								alt="Picture of the author"
							/>
							<div className={style.txtslide}>
								<h2>METALONS</h2>
								<p>
									O metalon é um tubo de aço carbono
									largamente utilizado na construção civil.
								</p>
							</div>
						</SwiperSlide>
						<SwiperSlide>
							<img
								className={style.imagemFundo}
								src="/004_112530.webp"
								alt="Picture of the author"
							/>
							<div className={style.txtslide}>
								<h2>CANTONEIRAS</h2>
								<p>
									Cantoneiras para todos as necessidades você
									encontra aqui na Indesfer.
								</p>
							</div>
						</SwiperSlide>
						<SwiperSlide>
							<img
								className={style.imagemFundo}
								src="/012_113543.webp"
								alt="Picture of the author"
							/>
							<div className={style.txtslide}>
								<h2>FERROS CHATOS</h2>
								<p>
									Toda a diversidade de ferros chatos você
									encontra aqui na Indesfer.
								</p>
							</div>
						</SwiperSlide>
					</Swiper>
				</main>
				<section>
					<div className={style.sobretitle}>
						<h2>SOBRE</h2>
					</div>
					<div className={style.bg}>
						<p>
							Lorem Ipsum is simply dummy text of the printing and
							typesetting industry. Lorem Ipsum has been the
							industrys standard dummy text ever since the 1500s,
							when an unknown printer took a galley of type and
							scrambled it to make a type specimen book. It has
							survived not only five centuries, but also the leap
							into electronic typesetting, remaining essentially
							unchanged. It was popularised in the 1960s with the
							release of Letraset sheets containing Lorem Ipsum
							passages, and more recently with desktop publishing
							software like Aldus PageMaker including versions of
							Lorem Ipsum.
						</p>
					</div>
				</section>

				<div className={style.catalogo}>
					<div className={style.title}>
						<h2>CATÁLOGO</h2>
					</div>
				</div>
			</body>
		</>
	)
}

export default Home
