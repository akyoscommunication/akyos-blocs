<footer class="container  footer-option--style-{{ $options['footer_option_style'] }}">
	<div class="footer-option">
		<h2>
			{!! $options['footer_option_text'] !!}
		</h2>
		<x-button :appearance="$options['footer_option_button']['color']" :icon="$options['footer_option_button']['icon']" :iconposition="$options['footer_option_button']['iconposition']"
					 :href="$options['footer_option_button']['link']['url']">
			{{ $options['footer_option_button']['link']['title'] }}
  </x-button>
  </div>
</footer>
∂
