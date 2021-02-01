import React, { useEffect, useState } from "react";

import ReactDOM from "react-dom";

function Switcher() {
	const [warna, setWarna] = useState(localStorage.getItem("theme"));

	const selectTheme = (value) => {
		localStorage.setItem("theme", value);

		document.querySelector("html").classList.add(localStorage.getItem("theme"));
		if (value == "dark") {
			setWarna("dark");
			document.querySelector("html").classList.remove("light");
		} else {
			setWarna("light");
			document.querySelector("html").classList.remove("dark");
		}
	};

	useEffect(() => {
		if (
			localStorage.theme === "dark" ||
			(!("theme" in localStorage) &&
				window.matchMedia("(prefers-color-scheme: dark)").matches)
		) {
			document.querySelector("html").classList.add("dark");
		} else {
			document.querySelector("html").classList.remove("dark");
		}
		// aktifkan jika ingin membuat tema sesuai dengan tema device
		// localStorage.removeItem("theme");
	}, []);

	return (
		<div className="flex items-center justify-center">
			<div className="relative inline-block w-10 mr-2 align-middle select-none">
				{warna === "dark" ? (
					<input
						onClick={() => selectTheme("light")}
						type="checkbox"
						name="toggle"
						id="toggle"
						defaultChecked
						className="absolute block w-6 h-6 transition border-4 rounded-full appearance-none cursor-pointer bg-secondary-900 border-secondary-700 toggle-checkbox focus:outline-none"
					/>
				) : (
					<input
						onClick={() => selectTheme("dark")}
						type="checkbox"
						name="toggle"
						id="toggle"
						className="absolute block w-6 h-6 transition bg-white border-4 border-gray-300 rounded-full appearance-none cursor-pointer toggle-checkbox focus:outline-none"
					/>
				)}
				<label
					// htmlFor="toggle"
					className="block h-6 overflow-hidden bg-gray-200 rounded-full toggle-label"
				></label>
			</div>
			<label className="text-xs select-none dark:text-gray-200">
				{warna == "dark" ? "Dark mode!" : "Light mode!"}
			</label>
		</div>
	);
}

export default Switcher;

if (document.querySelectorAll(".switcher")) {
	const showNodes = document.querySelectorAll(".switcher");
	showNodes.forEach((item) => {
		ReactDOM.render(<Switcher />, item);
	});
}
