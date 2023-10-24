import { useState, useEffect } from "react";

const THEMES = [
  "light", "dark", "cupcake", "bumblebee", "emerald", "corporate", "synthwave", "retro",
  "cyberpunk", "valentine", "halloween", "garden", "forest", "aqua", "lofi", "pastel",
  "fantasy", "wireframe", "black", "luxury", "dracula", "cmyk", "autumn", "business",
  "acid", "lemonade", "night", "coffee", "winter"];

export default function Header() {
  const [theme, setTheme] = useState('light');

  useEffect(() => {
    document.documentElement.setAttribute('data-theme', theme);
  }, [theme]);

  const handleThemeChange = (e) => {
    const val = e.target.getAttribute('data-set-theme');
    setTheme(val);
  };

  return (
    <header className="sticky top-0 z-50 py-1 bg-base-100">
      <div className="container">
        <div className="navbar bg-base-100">
          <div className="navbar-start">
            <div className="dropdown">
              <label tabIndex={0} className="btn primary btn-circle lg:hidden mr-1">
                <i className="bi bi-list text-2xl"></i>
              </label>
              <ul tabIndex={0} className="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li><a href="#!">Home</a></li>
                <li><a href="#!">About Us</a></li>
                <li><a href="#!">Services</a></li>
                <li><a href="#!">Blogs</a></li>
                <li><a href="#!">Contact</a></li>
              </ul>
    
            </div>

            <a className="btn btn-ghost normal-case text-xl">
              <img src="public/dema.png" className="w-11 mr-3" alt="Dema Uninus" /> Dema Uninus
            </a>
          </div>
          <div className="navbar-end hidden lg:flex">
            <ul className="menu menu-horizontal p-0 font-medium">
              <li><a href="#!" className="mr-2">Home</a></li>
              <li><a href="#!" className="mr-2">About Us</a></li>
              <li><a href="#!" className="mr-2">Services</a></li>
              <li><a href="#!" className="mr-2">Blogs</a></li>
              <li><a href="#!" className="mr-2">Contact</a></li>
            </ul>
            <div className="dropdown dropdown-end">
              <label tabIndex={0} className="btn"><i className="bi bi-moon"></i></label>
              <ul tabIndex={0} className="dropdown-content mt-1 w-52 max-h-96 overflow-y-auto menu menu-compact p-2  bg-base-200 shadow rounded-box">
              {
                THEMES.map((theme, i) => (
                  <li key={theme + i}>
                    <button data-set-theme={theme} onClick={handleThemeChange}>{theme}</button>
                  </li>
                ))
              }
            </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
  );
}
