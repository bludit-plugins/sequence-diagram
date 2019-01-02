# Sequence Diagram plugin for Bludit
This plugin turns text into UML sequence diagrams.

![screenshot-sequence-diagram](https://raw.githubusercontent.com/bludit-plugins/sequence-diagram/master/screenshot.png)

## Download and activate the plugin
- Download the latest stable version. [Releases versions](https://github.com/bludit-plugins/sequence-diagram/releases).
- Upload to your Bludit installation.
- Activate the plugin.
- More information about how to install a plugin in [Bludit documentation](https://docs.bludit.com/en/getting-started/plugins).

## Example
The following text is an HTML code with a simple example. This example is the same as the screenshot shows.

```
<div class="diagram">
Bludit->Server: Ping
Note right of Server: Server processing\nping command
Server-->Bludit: Pong
</div>
```

More examples
- https://bramp.github.io/js-sequence-diagrams/

## Vendors
The plugin use the javascript library [js-sequence-diagram](https://bramp.github.io/js-sequence-diagrams/).