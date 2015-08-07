{% if ((!isset($partial)) || ($partial!=1)) %}
<div id="ilab-modal-container">
    <div class="ilab-modal-titlebar">
        <h1>{% content title %}</h1>
        <a title="{{__('Close')}}" href="javascript:ILabModal.cancel();" class="media-modal-close">
            <span class="media-modal-icon"></span>
        </a>
    </div>
    <div id="ilab-modal-window-area">
{% endif %}
        <div class="ilab-modal-window-content-area">
            {% content main-tabs %}
            <div class="ilab-modal-editor-container">
                <div class="ilab-modal-editor-area">
                    {% content editor %}
                </div>
            </div>
            {% content bottom-bar %}
        </div>
        <div class="ilab-modal-sidebar">
            {% content sidebar-tabs %}
            {% content sidebar-content %}
            {% content sidebar-actions %}
        </div>
{% if ((!isset($partial)) || ($partial!=1)) %}
    </div>
</div>
{% endif %}

{% content script %}
