try {
	XTD.definitions = XTD.definitions || {};
	XTD.definitions.Property = function (name, display) {
		this.name = name;
		this.display = display;
		
		return this;
	}
	XTD.definitions.Property.prototype = new XTD.definitions.EditableItem();
} catch (e) {
    console.log(e);
}
