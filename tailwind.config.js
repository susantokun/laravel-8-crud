module.exports = {
	purge: [
		"./storage/framework/views/*.php",
		"./resources/views/**/*.blade.php",
		"./resources/js/**/*.js",
		"./resources/js/**/*.jsx",
		"./resources/js/**/*.vue",
	],

	darkMode: false, // or 'media' or 'class'
	presets: [require("./tailwind-preset-one")],

	theme: {
		extend: {},
	},

	variants: {
		extend: {
			opacity: ["disabled"],
			borderCollapse: ["hover", "focus"],
			backgroundColor: ["odd"],
		},
	},

	plugins: [require("@tailwindcss/forms")],
};
