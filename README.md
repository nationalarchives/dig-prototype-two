# DIG prototype

Laravel implementation of DIG prototype.

# Process represented

* Sign-in
	* User visits '/' and signs in
* My department and collections
	* Having signed in a user sees their department page, including:
		* Summary of registered collections and series contained
		* Ability to:
			* register a new collection
			* click through to an existing collection
* Individual collection and its series:
	* Having clicked through to a collection user:
		* Sees collection description
		* Sees list of series currently registered with the collection with:
			* Series Reference, name, description and type
			* Status (i.e. Metadata CSV uploaded)
		* Can click through to a series
* Individual series and its batches:
	* Having clicked through to a series user:
		* Sees series name, reference, description, parent collection and transferring department
		* Has ability to add a batch to the series
		* Sees batches currently registered and a summary of the records contained for any where metadata has been provided
* Individual batch and its records:
	* Having clicked through to a batch user:
		* Sees link to schema
		* Has ability to upload metadata
* Having uploaded metadata:
	* We mock and describe the different validation scenarios and present link that represents success
	* Show records described within metadata for the batch
	* Provide link to view uploaded metadata
* Viewing metadata:
	* Show any differences between the DROID report and metadata CSV
	* See summary of metadata
