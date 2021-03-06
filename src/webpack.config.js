var path = require("path");

var DIST_DIR = path.resolve(_dirname, "dist");
var SRC_DIR = path.resolve(_dirname, "src");

var config = {
  entry: SRC_DIR + "/app/index.js",
  output: {
    path: DIST_DIR + "/app",
    filename: "bundle.js",
    publicPath: "/app/"
  },
  module: {
    loader: [
      {
        test: /\.js?/,
        include: SRC_DIR,
        loader: "bable-loader",
        query: {
          presets: ["react", "es2015", "stage-2"]
        }
      }
    ]
  }
};

module.exports = config;
