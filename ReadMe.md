# John F Croston III Ate Here - Release Notes

* John F Croston III Ate Here - 10K Apart Entry
* Release Number:  v.0.3.2
* Release Date: 09-27-2016

## Overview
The project you are looking at are restaurants [John F Croston III](http://jfciii.com) - ([@jfc3](https://twitter.com/jfc3)) had etean at and his [10K Apart](https://a-k-apart.com/) entry. The website allows people to select a city, state, or nearby location and see what restauarants I recommend in that location.

When I started this project, I had been thinking about a more involved version of this application that a person could keep track of all the places they wanted to eat when they travel. More of a personal recommendation or list of places to eat. So this was a way to try a few ideas out and make it quick and easy to display restaurant information, along with being only 10 Kb.

This project uses hand-coded JSON files of cities, states, and nearby locations, which currently are the following with their JSON file name after the name:

* Annapolis, MD - ann
* Austin, TX - aus
* Baltimore, MD - bal
* Buffalo, NY - buf
* Boston, MA - bos
* Cleveland, PA - cle
* Columbus, OH - col
* Delaware - de
* Las Vegas, NV - las
* Maryland - md
* Memphis, TN -  mem
* Mississippi - ms
* New Orleans, LA - msy
* New York, NY - nyc
* Northern Virginia - nva
* Ocean City, NJ - ocnj
* Philadelphia, PA - phl
* Portland, OR - pdx
* Rochester, NY - roc
* San Deigo, CA - san
* Syracuse, NY - syr
* Washington, DC - dca

If you look in the CTY folder, you will find some cities and locations with more than one file. The ones with a dash and the word full (-full) in the name are the full version of the city or location. One of my goals was to create the HTML template and CSS in about 3 - 4Kb, so I had 6 or 7 Kb for content, along with that I wanted the rendered page to be under 10 Kb without minifying or zipping anything. Hopefully, I have done that.

There is a city.josn file that you can use as a tempalte to create other city files.

All the extra CLASSes for each restaurant are there so they have microformats added to them, which is hepful to computers. Look for the 'vcard' CLASS.

I'm working on a more detailed version that is not part of the 10K Apart contest that has my recommendations or ones my friends whose food recommendations I trust, TV shows, blog posts, articles, etc.

So in the near future, I plan on creating an application that people can keep track of the places they want to eat when they travel.

## New Features and Enhancements
Features:

* Travel more to be able to add more cities and more restaurants.
* Break the larger files of ten restaurants or more into multiple files so people don't have to scroll as much to see places to eat for one city or location. Maybe make it 25 restaurants so people don't have to load a second page.
* Add an accessible SVG map of the Unites States that will allow people to see places to eat in the nearby location.
* Add a way to check that people are not attempting to change the URL to find places not listed. Most likely to use an ARRAY so we can loop through the list to look for matches.
* Look into adding social media for at least Twitter and Facebook so people can point their friends to the website or share there information with others.

Enhancements:

* Added Boston, MA, to drop down list and created necessary JSON.
* Added code to check INPUT field for special characters.
* Added error message for when people submit the FORM without selecting a location.
* Added link to project on GitHub in the footer.
* Added e-mail link for questions in the footer.
* Removed the "Address" and Phone" text from screen.
* Made address a link to Goolge Maps.


## Installation
Please have the following installed before running:
* You will need a server with at least PHP 5.6

## Versioning notation
John F Croston III Ate Here public release notation follows the semantic versioning as outlined on http://semver.org
To summarize,
Given a version number MAJOR.MINOR.PATCH, increment the:

* MAJOR version for incompatible API changes,
* MINOR version for backwards-compatible manner alterations and
* PATCH version for backwards-compatible bug fixes.

Additional labels for pre-release, and build metadata are available as extensions to the MAJOR.MINOR.PATCH format.

## Future Notes

* n/a