var Dimension = require("../less/tree/dimension"),
    Expression = require("../less/tree/expression"),
    functionRegistry = require("./../less/functions/function-registry"),
    path = require("path");

function imageSize(functionContext, filePathNode) {
    var filePath = filePathNode.value;
    var currentFileInfo = functionContext.currentFileInfo;
    var currentDirectory = currentFileInfo.relativeUrls ?
        currentFileInfo.currentDirectory : currentFileInfo.entryPath;

    var sizeOf = require('image-size');
    filePath = path.join(currentDirectory, filePath);
    return sizeOf(filePath);
}

var imageFunctions = {
    "image-size": function(filePathNode) {
        var size = imageSize(this, filePathNode);
        return new Expression([
            new Dimension(size.width, "px"),
            new Dimension(size.height, "px")
        ]);
    },
    "image-width": function(filePathNode) {
        var size = imageSize(this, filePathNode);
        return new Dimension(size.width, "px");
    },
    "image-height": function(filePathNode) {
        var size = imageSize(this, filePathNode);
        return new Dimension(size.height, "px");
    }
};

functionRegistry.addMultiple(imageFunctions);