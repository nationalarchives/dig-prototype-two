# DIG prototype

DIG prototype representing domain with: 

* A **user** being associated with one department
* A department having many **collections**
* A collection having many **series**
* A series having many **batches** 
* A batch having:
    * **records**
    * CSV metadata
    * a transfer status
* A batch being transferred

# Processes represented

## Sign-in / Registrations / Authentication

Access to pages within the application requires sign in. Features of a real system that are not currently represented are: 

* Role base access privileges
* Workflow groups

## Global elements

The page is scaffolded with a number of 'global' elements intended to provide access to key actions at any stage. These include: 

* Search
* Guidance
* Message centre
* Notification panel

## Department and its collections

Having signed in a user is presented with their department page showing high level information about registered collections and the number of series they contain. At this point users are able to: 
* register a new collection
* navigate to an existing collection

## Individual collection and its series
Having clicked through to a collection the user is presented with a single collection and information about the is series contains. For each series it includes:
* Series references and names
* Series descriptions
* Series type
* The number of batches contained

Todo: We need to reintroduce the filters that are included in Prototype 1. It also might be worth providing a 'search within' facility at this point. 

## Individual series and its batches:
By selecting a series users are presented with more information about the series, including: 
* Everything from the collection page
* A list of batches within the series and their current status
* The ability to add a new batch to the series
* A summary of the uploaded metadata for _all_ batches within the series

## Individual batch (before metadata is provided)
The individual batch shows:
* A progress indicator
* A 'dummy' link to the schema file
* A form allowing for metadata CSV to be uploaded

## Validation process (mock)

The metadata validation is mocked in the prototype based upon the name of the file that is uploaded. Upon submitting the metadata the user is presented with one of four states:

* An error message if no file was uploaded
* An error message indicating that the file type/structure is incorrect (if the uploaded file was `scenario_one.csv`)
* An error message indicating that the file did not validate against the schema (if the uploaded file was `scenario_two.csv`)
* A confirmation message and summary of the uploaded metadata (if the uploaded file was `metadata.csv`)

## Individual batch (after metadata is uploaded successfully)

Once metadata has been uploaded the user is presented with: 

* a success message and an updated status bar
* a suggested transfer method (based on the information contained in the metadata upload)
* a list of the records described in the metadata with:
    * Reference, title and closure status
    * The ability to click through to a record and see how it might appear in the catalogue
* a link to the uploaded metadata, allowing them to:
    * see how it differs from the schema
    * view a summary of the information contained
    * delete and re-submit if necessary
* Individual batch and its records:
	* Having clicked through to a batch user:
		* Sees link to schema
		* Has ability to upload metadata

## Begin transfer process
Having reviewed a batch users can proceed to begin transfer
