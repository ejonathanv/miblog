require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

const editor = document.querySelector( '#editor' );

if(editor){
	ClassicEditor.create(editor).then( editor => {
		    console.log( editor );
		} ).catch( error => {
		    console.error( error );
		} );
}
