const prod = process.env.NODE_ENV === "production";

const tailwindcss = require("tailwindcss");

// @ts-ignore // provided types are wrong
const purgecss = require("@fullhuman/postcss-purgecss")({
  content: ["**/*.html"],
  defaultExtractor: (content) => content.match(/[\w-/:]+(?<!:)/g) || [],
});

const cssNano = require("cssnano")({
  preset: ["default", { normalizeWhitespace: false }],
});

module.exports = {
  plugins: [
    require("postcss-import"),
    tailwindcss("dev/tailwind.config.js"),
    require("postcss-nested"),
    require("autoprefixer"),
    prod && purgecss,
    prod && cssNano,
  ].filter(Boolean),
};
