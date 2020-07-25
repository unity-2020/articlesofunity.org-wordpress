const { colors, margin, spacing } = require("tailwindcss/defaultTheme");

// This multiplier is needed because of the crazy WP theme resetting the default font size.
const rem = (n) => `${n * 1.6}rem`;

module.exports = {
  purge: false,
  theme: {
    extend: {
      colors: {
        orange: {
          ...colors.orange,
          // TODO: finish this orange palette
          "300": "#fed6c9",
          "600": "#ff8253",
        },
      },
      maxWidth: {
        "2": rem(0.5),
      },
    },
    fontSize: {
      xs: rem(0.75),
      sm: rem(0.875),
      base: rem(1),
      lg: rem(1.125),
      xl: rem(1.25),
      "2xl": rem(1.5),
      "3xl": rem(1.875),
      "4xl": rem(2.25),
      "5xl": rem(3),
      "6xl": rem(4),
    },
    spacing: {
      ...spacing,
      "1": rem(0.25),
      "2": rem(0.5),
      "3": rem(0.75),
      "4": rem(1),
      "5": rem(1.25),
      "6": rem(1.5),
      "8": rem(2),
      "10": rem(2.5),
      "12": rem(3),
      "16": rem(4),
      "20": rem(5),
      "24": rem(6),
      "32": rem(8),
      "40": rem(10),
      "48": rem(12),
      "49": rem(12.5), // custom
      "50": rem(13), // custom
      "56": rem(14),
      "64": rem(16),
    },
  },
  variants: {},
  plugins: [],
  important: true,
};
