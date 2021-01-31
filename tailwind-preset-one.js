const defaultTheme = require("tailwindcss/defaultTheme");
const colors = require("tailwindcss/colors");

module.exports = {
	theme: {
		colors: {
			transparent: "transparent",
			current: "currentColor",
			black: "#000",
			white: "#fff",
			gray: colors.gray,
			red: colors.red,
			yellow: colors.amber,
			blue: colors.blue,
			lightBlue: colors.lightBlue,
			green: colors.emerald,
			primary: colors.blue,
			secondary: colors.blueGray,
		},
		extend: {
			fontFamily: {
				sans: ["Ubuntu", ...defaultTheme.fontFamily.sans],
			},
		},
	},

	variants: {
		extend: {
			ringOpacity: ["dark"],
		},
	},
};
