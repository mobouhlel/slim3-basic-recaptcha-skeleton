	{% if flash.getMessage('success') %}
		<div class="alert alert-success" role="alert">
			<span class="relative top-minus-5">{{ flash.getMessage('success') | first }}</span>
		</div>
	{% endif %}

	{% if flash.getMessage('error') %}
		<div class="alert alert-danger" role="alert">
			<span class="relative top-minus-5">{{ flash.getMessage('error') | first }}</span>
		</div>
	{% endif %}

	{% if flash.getMessage('info') %}
		<div class="alert alert-info" role="alert">
			<span class="relative top-minus-5">{{ flash.getMessage('info') | first }}</span>
		</div>
	{% endif %}

	{% if flash.getMessage('warning') %}
		<div class="alert alert-warning" role="alert">
			<span class="relative top-minus-5">{{ flash.getMessage('warning') | first }}</span>
		</div>
	{% endif %}
                    