# Sequence Diagram plugin for Bludit
This plugin enable turns text into UML sequence diagrams, use the javascript library [js-sequence-diagram](https://bramp.github.io/js-sequence-diagrams/).

![screenshot-sequence-diagram](https://raw.githubusercontent.com/bludit-plugins/sequence-diagram/master/screenshot.png)

## Example
First, remember to install and activate the plugin.
The bellowed text is an HTML code you can insert in the new page.

```
<div class="diagram">
Bludit->Server: Ping
Note right of Server: Server processing\nping command
Server-->Bludit: Pong
</div>
```

More examples in the website of the developer of the javascript library.
- https://bramp.github.io/js-sequence-diagrams/