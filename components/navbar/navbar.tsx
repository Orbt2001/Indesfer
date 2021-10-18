import style from './style.module.css'

export default function Navbar(props: { onClick: (arg0: boolean) => void; }){
    function emit(o: boolean){
        props.onClick(true);
    }
    return (
        <div className={style.navdiv}>
            <ul>
                <li>
                </li>
                <li>
                    <img 
                        className={style.invertImage}  
                        src="arrow.png" 
                        alt="Arrow" 
                        height="30" 
                        onClick={e => emit(true)}
                    />
                </li>
                <li>
                    <img src="logo.webp" alt="Indesfer Logo" />
                </li>
                <li>
                    <a href="">Inicio</a>
                </li>
                <li>
                    <a href="">Catálogo</a>
                </li>
                <li>
                    <a href="">clientes</a>
                </li>
                <li>
                    <a href="">contato</a>
                </li>
            </ul>
            <div className={style.border}>
            </div>
        </div>
    )
}