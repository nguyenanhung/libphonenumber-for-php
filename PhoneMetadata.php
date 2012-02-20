<?php

namespace com\google\i18n\phonenumbers;

class PhoneMetadata {

	/**
	 * @var string
	 */
	private $id = NULL;

	/**
	 *
	 * @return boolean
	 */
	public function hasId() {
		return isset($this->id);
	}

	/**
	 *
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 *
	 * @param string $value
	 * @return PhoneMetadata
	 */
	public function setId($value) {
		$this->id = $value;
		return $this;
	}

	/**
	 *
	 * @var int
	 */
	private $countryCode = NULL;

	/**
	 *
	 * @return boolean
	 */
	public function hasCountryCode() {
		return isset($this->countryCode);
	}

	/**
	 *
	 * @return int
	 */
	public function getCountryCode() {
		return $this->countryCode;
	}

	/**
	 *
	 * @param int $value
	 * @return PhoneMetadata
	 */
	public function setCountryCode($value) {
		$this->countryCode = $value;
		return $this;
	}

	private $leadingDigits = NULL;

	public function hasLeadingDigits() {
		return isset($this->leadingDigits);
	}

	public function getLeadingDigits() {
		return $this->leadingDigits;
	}

	public function setLeadingDigits($value) {
		$this->leadingDigits = $value;
		return $this;
	}

	private $internationalPrefix = NULL;

	public function hasInternationalPrefix() {
		return isset($this->internationalPrefix);
	}

	public function getInternationalPrefix() {
		return $this->internationalPrefix;
	}

	public function setInternationalPrefix($value) {
		$this->internationalPrefix = $value;
		return $this;
	}

	private $preferredInternationalPrefix = "";

	public function hasPreferredInternationalPrefix() {
		return isset($this->preferredInternationalPrefix);
	}

	public function getPreferredInternationalPrefix() {
		return $this->preferredInternationalPrefix;
	}

	public function setPreferredInternationalPrefix($value) {
		$this->preferredInternationalPrefix = $value;
		return $this;
	}

	private $nationalPrefixForParsing = NULL;

	public function hasNationalPrefixForParsing() {
		return isset($this->nationalPrefixForParsing);
	}

	public function getNationalPrefixForParsing() {
		return $this->nationalPrefixForParsing;
	}

	public function setNationalPrefixForParsing($value) {
		$this->nationalPrefixForParsing = $value;
		return $this;
	}

	private $nationalPrefixTransformRule = NULL;

	public function hasNationalPrefixTransformRule() {
		return isset($this->nationalPrefixTransformRule);
	}

	public function getNationalPrefixTransformRule() {
		return $this->nationalPrefixTransformRule;
	}

	public function setNationalPrefixTransformRule($value) {
		$this->nationalPrefixTransformRule = $value;
		return $this;
	}

	private $nationalPrefix = NULL;

	public function hasNationalPrefix() {
		return isset($this->nationalPrefix);
	}

	public function getNationalPrefix() {
		return $this->nationalPrefix;
	}

	public function setNationalPrefix($value) {
		$this->nationalPrefix = $value;
		return $this;
	}

	private $preferredExtnPrefix = NULL;

	public function hasPreferredExtnPrefix() {
		return isset($this->preferredExtnPrefix);
	}

	public function getPreferredExtnPrefix() {
		return $this->preferredExtnPrefix;
	}

	public function setPreferredExtnPrefix($value) {
		$this->preferredExtnPrefix = $value;
		return $this;
	}

	private $mainCountryForCode = NULL;

	public function hasMainCountryForCode() {
		return isset($this->mainCountryForCode);
	}

	public function isMainCountryForCode() {
		return $this->mainCountryForCode;
	}

	// Method that lets this class have the same interface as the one generated by Protocol Buffers
	// which is used by C++ build tools.
	public function getMainCountryForCode() {
		return $this->mainCountryForCode;
	}

	public function setMainCountryForCode($value) {
		$this->mainCountryForCode = $value;
		return $this;
	}

	private $leadingZeroPossible = NULL;

	public function hasLeadingZeroPossible() {
		return isset($this->leadingZeroPossible);
	}

	public function isLeadingZeroPossible() {
		return $this->leadingZeroPossible;
	}

	public function setLeadingZeroPossible($value) {
		$this->leadingZeroPossible = $value;
		return $this;
	}

	private $generalDesc = null;

	public function hasGeneralDesc() {
		return isset($this->generalDesc);
	}

	/**
	 *
	 * @return PhoneNumberDesc 
	 */
	public function getGeneralDesc() {
		return $this->generalDesc;
	}

	public function setGeneralDesc(PhoneNumberDesc $value) {
		$this->generalDesc = $value;
		return $this;
	}

	/**
	 *
	 * @var PhoneNumberDesc
	 */
	private $mobile = null;

	public function hasMobile() {
		return isset($this->mobile);
	}

	/**
	 *
	 * @return PhoneNumberDesc
	 */
	public function getMobile() {
		return $this->mobile;
	}

	public function setMobile(PhoneNumberDesc $value) {
		$this->mobile = $value;
		return $this;
	}

	private $premiumRate = null;

	public function hasPremiumRate() {
		return isset($this->premiumRate);
	}

	public function getPremiumRate() {
		return $this->premiumRate;
	}

	public function setPremiumRate(PhoneNumberDesc $value) {
		$this->premiumRate = $value;
		return $this;
	}

	private $fixedLine = null;

	public function hasFixedLine() {
		return isset($this->fixedLine);
	}

	public function getFixedLine() {
		return $this->fixedLine;
	}

	public function setFixedLine(PhoneNumberDesc $value) {
		$this->fixedLine = $value;
		return $this;
	}

	private $sameMobileAndFixedLinePattern = NULL;

	public function hasSameMobileAndFixedLinePattern() {
		return isset($this->sameMobileAndFixedLinePattern);
	}

	public function isSameMobileAndFixedLinePattern() {
		return $this->sameMobileAndFixedLinePattern;
	}

	public function setSameMobileAndFixedLinePattern($value) {
		$this->sameMobileAndFixedLinePattern = $value;
		return $this;
	}

	private $numberFormat = array();

	public function numberFormats() {
		return $this->numberFormat;
	}

	public function numberFormatSize() {
		return count($this->numberFormat);
	}

	public function getNumberFormat($index) {
		return $this->numberFormat[$index];
	}

	public function addNumberFormat(NumberFormat $value) {
		$this->numberFormat[] = $value;
		return $this;
	}

	private $tollFree = NULL;

	public function hasTollFree() {
		return isset($this->tollFree);
	}

	public function getTollFree() {
		return $this->tollFree;
	}

	public function setTollFree(PhoneNumberDesc $value) {
		$this->tollFree = $value;
		return $this;
	}

	private $sharedCost = null;

	public function hasSharedCost() {
		return isset($this->sharedCost);
	}

	public function getSharedCost() {
		return $this->sharedCost;
	}

	public function setSharedCost(PhoneNumberDesc $value) {
		$this->sharedCost = $value;
		return $this;
	}

	/*

	  // required PhoneNumberDesc personal_number = 7;
	  private boolean hasPersonalNumber;
	  private PhoneNumberDesc personalNumber_ = null;
	  public boolean hasPersonalNumber() { return hasPersonalNumber; }
	  public PhoneNumberDesc getPersonalNumber() { return personalNumber_; }
	  public PhoneMetadata setPersonalNumber(PhoneNumberDesc value) {
	  if (value == null) {
	  throw new NullPointerException();
	  }
	  hasPersonalNumber = true;
	  personalNumber_ = $value;
	  return this;
	  }

	  // required PhoneNumberDesc voip = 8;
	  private boolean hasVoip;
	  private PhoneNumberDesc voip_ = null;
	  public boolean hasVoip() { return hasVoip; }
	  public PhoneNumberDesc getVoip() { return voip_; }
	  public PhoneMetadata setVoip(PhoneNumberDesc value) {
	  if (value == null) {
	  throw new NullPointerException();
	  }
	  hasVoip = true;
	  voip_ = $value;
	  return this;
	  }

	  // required PhoneNumberDesc pager = 21;
	  private boolean hasPager;
	  private PhoneNumberDesc pager_ = null;
	  public boolean hasPager() { return hasPager; }
	  public PhoneNumberDesc getPager() { return pager_; }
	  public PhoneMetadata setPager(PhoneNumberDesc value) {
	  if (value == null) {
	  throw new NullPointerException();
	  }
	  hasPager = true;
	  pager_ = $value;
	  return this;
	  }

	  // required PhoneNumberDesc uan = 25;
	  private boolean hasUan;
	  private PhoneNumberDesc uan_ = null;
	  public boolean hasUan() { return hasUan; }
	  public PhoneNumberDesc getUan() { return uan_; }
	  public PhoneMetadata setUan(PhoneNumberDesc value) {
	  if (value == null) {
	  throw new NullPointerException();
	  }
	  hasUan = true;
	  uan_ = $value;
	  return this;
	  }

	  // required PhoneNumberDesc voicemail = 28;
	  private boolean hasVoicemail;
	  private PhoneNumberDesc voicemail_ = null;
	  public boolean hasVoicemail() { return hasVoicemail; }
	  public PhoneNumberDesc getVoicemail() { return voicemail_; }
	  public PhoneMetadata setVoicemail(PhoneNumberDesc value) {
	  if (value == null) {
	  throw new NullPointerException();
	  }
	  hasVoicemail = true;
	  voicemail_ = $value;
	  return this;
	  }

	  // required PhoneNumberDesc emergency = 27;
	  private boolean hasEmergency;
	  private PhoneNumberDesc emergency_ = null;
	  public boolean hasEmergency() { return hasEmergency; }
	  public PhoneNumberDesc getEmergency() { return emergency_; }
	  public PhoneMetadata setEmergency(PhoneNumberDesc value) {
	  if (value == null) {
	  throw new NullPointerException();
	  }
	  hasEmergency = true;
	  emergency_ = $value;
	  return this;
	  }

	  // required PhoneNumberDesc noInternationalDialling = 24;
	  private boolean hasNoInternationalDialling;
	  private PhoneNumberDesc noInternationalDialling_ = null;
	  public boolean hasNoInternationalDialling() { return hasNoInternationalDialling; }
	  public PhoneNumberDesc getNoInternationalDialling() { return noInternationalDialling_; }
	  public PhoneMetadata setNoInternationalDialling(PhoneNumberDesc value) {
	  if (value == null) {
	  throw new NullPointerException();
	  }
	  hasNoInternationalDialling = true;
	  noInternationalDialling_ = $value;
	  return this;
	  }
	 */

	/**
	 *
	 * @var NumberFormat 
	 */
	private $intlNumberFormat = array();

	public function intlNumberFormats() {
		return $this->intlNumberFormat;
	}

	public function intlNumberFormatSize() {
		return count($this->intlNumberFormat);
	}

	public function getIntlNumberFormat($index) {
		return $this->intlNumberFormat[$index];
	}

	public function addIntlNumberFormat(NumberFormat $value) {
		$this->intlNumberFormat[] = $value;
		return $this;
	}

	public function clearIntlNumberFormat() {
		$this->intlNumberFormat = array();
		return $this;
	}

	public function toArray() {
		$output = array();

		if ($this->hasGeneralDesc()) {
			$output['generalDesc'] = $this->getGeneralDesc()->toArray();
		}

		if ($this->hasFixedLine()) {
			$output['fixedLine'] = $this->getFixedLine()->toArray();
		}

		if ($this->hasMobile()) {
			$output['mobile'] = $this->getMobile()->toArray();
		}

		if ($this->hasTollFree()) {
			$output['tollFree'] = $this->getTollFree()->toArray();
		}

		if ($this->hasPremiumRate()) {
			$output['premiumRate'] = $this->getPremiumRate()->toArray();
		}

		if ($this->hasPremiumRate()) {
			$output['premiumRate'] = $this->getPremiumRate()->toArray();
		}

		if ($this->hasSharedCost()) {
			$output['sharedCost'] = $this->getSharedCost()->toArray();
		}

		/*
		  objectOutput.writeBoolean(hasPersonalNumber);
		  if (hasPersonalNumber) {
		  personalNumber_.writeExternal(objectOutput);
		  }
		  objectOutput.writeBoolean(hasVoip);
		  if (hasVoip) {
		  voip_.writeExternal(objectOutput);
		  }
		  objectOutput.writeBoolean(hasPager);
		  if (hasPager) {
		  pager_.writeExternal(objectOutput);
		  }
		  objectOutput.writeBoolean(hasUan);
		  if (hasUan) {
		  uan_.writeExternal(objectOutput);
		  }
		  objectOutput.writeBoolean(hasVoicemail);
		  if (hasVoicemail) {
		  voicemail_.writeExternal(objectOutput);
		  }
		  objectOutput.writeBoolean(hasEmergency);
		  if (hasEmergency) {
		  emergency_.writeExternal(objectOutput);
		  }
		  objectOutput.writeBoolean(hasNoInternationalDialling);
		  if (hasNoInternationalDialling) {
		  noInternationalDialling_.writeExternal(objectOutput);
		  }
		 */

		$output['id'] = $this->getId();
		$output['countryCode'] = $this->getCountryCode();
		$output['internationalPrefix'] = $this->getInternationalPrefix();

		if ($this->hasPreferredInternationalPrefix()) {
			$output['preferredInternationalPrefix'] = $this->getPreferredInternationalPrefix();
		}

		if ($this->hasNationalPrefix()) {
			$output['nationalPrefix'] = $this->getNationalPrefix();
		}

		if ($this->hasPreferredExtnPrefix()) {
			$output['preferredExtnPrefix'] = $this->getPreferredExtnPrefix();
		}

		if ($this->hasNationalPrefixForParsing()) {
			$output['nationalPrefixForParsing'] = $this->getNationalPrefixForParsing();
		}

		if ($this->hasNationalPrefixTransformRule()) {
			$output['nationalPrefixTransformRule'] = $this->getNationalPrefixTransformRule();
		}

		$output['sameMobileAndFixedLinePattern'] = $this->isSameMobileAndFixedLinePattern();

		$output['numberFormat'] = array();
		foreach ($this->numberFormats() as $numberFormat) {
			/* @var $numberFormat NumberFormat */
			$output['numberFormat'][] = $numberFormat->toArray();
		}

		$output['intlNumberFormat'] = array();
		foreach ($this->intlNumberFormats() as $intlNumberFormat) {
			/* @var $numberFormat NumberFormat */
			$output['intlNumberFormat'][] = $intlNumberFormat->toArray();
		}

		$output['mainCountryForCode'] = $this->getMainCountryForCode();

		if ($this->hasLeadingDigits()) {
			$output['leadingDigits'] = $this->getLeadingDigits();
		}

		/* 		
		  objectOutput.writeBoolean(leadingZeroPossible_);
		 */


		return $output;
	}

	public function fromArray(array $input) {

		if (isset($input['generalDesc'])) {
			$desc = new PhoneNumberDesc();
			$this->setGeneralDesc($desc->fromArray($input['generalDesc']));
		}

		if (isset($input['fixedLine'])) {
			$desc = new PhoneNumberDesc();
			$this->setFixedLine($desc->fromArray($input['fixedLine']));
		}

		if (isset($input['mobile'])) {
			$desc = new PhoneNumberDesc();
			$this->setMobile($desc->fromArray($input['mobile']));
		}

		if (isset($input['tollFree'])) {
			$desc = new PhoneNumberDesc();
			$this->setTollFree($desc->fromArray($input['tollFree']));
		}

		if (isset($input['premiumRate'])) {
			$desc = new PhoneNumberDesc();
			$this->setPremiumRate($desc->fromArray($input['premiumRate']));
		}

		if (isset($input['sharedCost'])) {
			$desc = new PhoneNumberDesc();
			$this->setSharedCost($desc->fromArray($input['sharedCost']));
		}

		/*
		  hasDesc = objectInput.readBoolean();
		  if (hasDesc) {
		  PhoneNumberDesc desc = new PhoneNumberDesc();
		  desc.readExternal(objectInput);
		  setPersonalNumber(desc);
		  }
		  hasDesc = objectInput.readBoolean();
		  if (hasDesc) {
		  PhoneNumberDesc desc = new PhoneNumberDesc();
		  desc.readExternal(objectInput);
		  setVoip(desc);
		  }
		  hasDesc = objectInput.readBoolean();
		  if (hasDesc) {
		  PhoneNumberDesc desc = new PhoneNumberDesc();
		  desc.readExternal(objectInput);
		  setPager(desc);
		  }
		  hasDesc = objectInput.readBoolean();
		  if (hasDesc) {
		  PhoneNumberDesc desc = new PhoneNumberDesc();
		  desc.readExternal(objectInput);
		  setUan(desc);
		  }
		  hasDesc = objectInput.readBoolean();
		  if (hasDesc) {
		  PhoneNumberDesc desc = new PhoneNumberDesc();
		  desc.readExternal(objectInput);
		  setVoicemail(desc);
		  }
		  hasDesc = objectInput.readBoolean();
		  if (hasDesc) {
		  PhoneNumberDesc desc = new PhoneNumberDesc();
		  desc.readExternal(objectInput);
		  setEmergency(desc);
		  }
		  hasDesc = objectInput.readBoolean();
		  if (hasDesc) {
		  PhoneNumberDesc desc = new PhoneNumberDesc();
		  desc.readExternal(objectInput);
		  setNoInternationalDialling(desc);
		  }
		 */
		$this->setId($input['id']);
		$this->setCountryCode($input['countryCode']);
		$this->setInternationalPrefix($input['internationalPrefix']);
		/*
		  boolean hasString = objectInput.readBoolean();
		  if (hasString) {
		  setPreferredInternationalPrefix(objectInput.readUTF());
		  }
		 */
		if (isset($input['nationalPrefix'])) {
			$this->setNationalPrefix($input['nationalPrefix']);
		}
		/*
		  hasString = objectInput.readBoolean();
		  if (hasString) {
		  setPreferredExtnPrefix(objectInput.readUTF());
		  }
		 */

		if (isset($input['nationalPrefixForParsing'])) {
			$this->setNationalPrefixForParsing($input['nationalPrefixForParsing']);
		}

		if (isset($input['nationalPrefixTransformRule'])) {
			$this->setNationalPrefixTransformRule($input['nationalPrefixTransformRule']);
		}

		/*
		  setSameMobileAndFixedLinePattern(objectInput.readBoolean());
		 */

		foreach ($input['numberFormat'] as $numberFormatElt) {
			$numberFormat = new NumberFormat();
			$numberFormat->fromArray($numberFormatElt);
			$this->addNumberFormat($numberFormat);
		}

		foreach ($input['intlNumberFormat'] as $intlNumberFormatElt) {
			$numberFormat = new NumberFormat();
			$numberFormat->fromArray($intlNumberFormatElt);
			$this->addIntlNumberFormat($numberFormat);
		}

		/*
		  setMainCountryForCode(objectInput.readBoolean());
		 * 
		 */
		$this->setMainCountryForCode($input['mainCountryForCode']);

		if (isset($input['leadingDigits'])) {
			$this->setLeadingDigits($input['leadingDigits']);
		}

		/*
		  setLeadingZeroPossible(objectInput.readBoolean());
		 */
		return $this;
	}

}

class PhoneNumberDesc {

	private $hasNationalNumberPattern;
	private $nationalNumberPattern_ = "";

	public function hasNationalNumberPattern() {
		return $this->hasNationalNumberPattern;
	}

	public function getNationalNumberPattern() {
		return $this->nationalNumberPattern_;
	}

	public function setNationalNumberPattern($value) {
		$this->hasNationalNumberPattern = true;
		$this->nationalNumberPattern_ = $value;
		return $this;
	}

	private $hasPossibleNumberPattern;
	private $possibleNumberPattern_ = "";

	public function hasPossibleNumberPattern() {
		return $this->hasPossibleNumberPattern;
	}

	public function getPossibleNumberPattern() {
		return $this->possibleNumberPattern_;
	}

	public function setPossibleNumberPattern($value) {
		$this->hasPossibleNumberPattern = true;
		$this->possibleNumberPattern_ = $value;
		return $this;
	}

	private $hasExampleNumber;
	private $exampleNumber_ = "";

	public function hasExampleNumber() {
		return $this->hasExampleNumber;
	}

	public function getExampleNumber() {
		return $this->exampleNumber_;
	}

	public function setExampleNumber($value) {
		$this->hasExampleNumber = true;
		$this->exampleNumber_ = $value;
		return $this;
	}

	public function mergeFrom(PhoneNumberDesc $other) {
		if ($other->hasNationalNumberPattern()) {
			$this->setNationalNumberPattern($other->getNationalNumberPattern());
		}
		if ($other->hasPossibleNumberPattern()) {
			$this->setPossibleNumberPattern($other->getPossibleNumberPattern());
		}
		if ($other->hasExampleNumber()) {
			$this->setExampleNumber($other->getExampleNumber());
		}
		return $this;
	}

	public function exactlySameAs(PhoneNumberDesc $other) {
		return $this->nationalNumberPattern_ === $other->nationalNumberPattern_ &&
				$this->possibleNumberPattern_ === $other->possibleNumberPattern_ &&
				$this->exampleNumber_ === $other->exampleNumber_;
	}

	public function toArray() {
		return array(
			'NationalNumberPattern' => $this->getNationalNumberPattern(),
			'PossibleNumberPattern' => $this->getPossibleNumberPattern(),
			'ExampleNumber' => $this->getExampleNumber(),
		);
	}

	public function fromArray(array $input) {
		if (isset($input['NationalNumberPattern'])) {
			$this->setNationalNumberPattern($input['NationalNumberPattern']);
		}
		if (isset($input['PossibleNumberPattern'])) {
			$this->setPossibleNumberPattern($input['PossibleNumberPattern']);
		}
		if (isset($input['ExampleNumber'])) {
			$this->setExampleNumber($input['ExampleNumber']);
		}
		return $this;
	}

}

class NumberFormat {

	private $pattern = NULL;

	public function hasPattern() {
		return isset($this->pattern);
	}

	public function getPattern() {
		return $this->pattern;
	}

	public function setPattern($value) {
		$this->pattern = $value;
		return $this;
	}

	private $format = NULL;

	public function hasFormat() {
		return isset($this->format);
	}

	public function getFormat() {
		return $this->format;
	}

	public function setFormat($value) {
		$this->format = $value;
		return $this;
	}

	private $leadingDigitsPattern = array();

	public function leadingDigitPatterns() {
		return $this->leadingDigitsPattern;
	}

	public function leadingDigitsPatternSize() {
		return count($this->leadingDigitsPattern);
	}

	public function getLeadingDigitsPattern($index) {
		return $this->leadingDigitsPattern[$index];
	}

	public function addLeadingDigitsPattern($value) {
		$this->leadingDigitsPattern[] = $value;
		return $this;
	}

	private $nationalPrefixFormattingRule = NULL;

	public function hasNationalPrefixFormattingRule() {
		return isset($this->nationalPrefixFormattingRule);
	}

	public function getNationalPrefixFormattingRule() {
		return $this->nationalPrefixFormattingRule;
	}

	public function setNationalPrefixFormattingRule($value) {
		$this->nationalPrefixFormattingRule = $value;
		return $this;
	}

	public function clearNationalPrefixFormattingRule() {
		$this->nationalPrefixFormattingRule = NULL;
		return $this;
	}

	/*
	  // optional bool national_prefix_optional_when_formatting = 6;
	  private boolean hasNationalPrefixOptionalWhenFormatting;
	  private boolean nationalPrefixOptionalWhenFormatting_ = false;
	  public boolean hasNationalPrefixOptionalWhenFormatting() {
	  return hasNationalPrefixOptionalWhenFormatting; }
	  public boolean isNationalPrefixOptionalWhenFormatting() {
	  return nationalPrefixOptionalWhenFormatting_; }
	  public NumberFormat setNationalPrefixOptionalWhenFormatting(boolean value) {
	  hasNationalPrefixOptionalWhenFormatting = true;
	  nationalPrefixOptionalWhenFormatting_ = value;
	  return this;
	  }
	 */

	private $domesticCarrierCodeFormattingRule = NULL;

	public function hasDomesticCarrierCodeFormattingRule() {
		return isset($this->domesticCarrierCodeFormattingRule);
	}

	public function getDomesticCarrierCodeFormattingRule() {
		return $this->domesticCarrierCodeFormattingRule;
	}

	public function setDomesticCarrierCodeFormattingRule($value) {
		$this->domesticCarrierCodeFormattingRule = $value;
		return $this;
	}

	/*
	  public NumberFormat mergeFrom(NumberFormat other) {
	  if (other.hasPattern()) {
	  setPattern(other.getPattern());
	  }
	  if (other.hasFormat()) {
	  setFormat(other.getFormat());
	  }
	  int leadingDigitsPatternSize = other.leadingDigitsPatternSize();
	  for (int i = 0; i < leadingDigitsPatternSize; i++) {
	  addLeadingDigitsPattern(other.getLeadingDigitsPattern(i));
	  }
	  if (other.hasNationalPrefixFormattingRule()) {
	  setNationalPrefixFormattingRule(other.getNationalPrefixFormattingRule());
	  }
	  if (other.hasDomesticCarrierCodeFormattingRule()) {
	  setDomesticCarrierCodeFormattingRule(other.getDomesticCarrierCodeFormattingRule());
	  }
	  setNationalPrefixOptionalWhenFormatting(other.isNationalPrefixOptionalWhenFormatting());
	  return this;
	  }
	 */

	public function toArray() {
		$output = array();
		$output['pattern'] = $this->getPattern();
		$output['format'] = $this->getFormat();

		$output['leadingDigitsPatterns'] = $this->leadingDigitPatterns();

		if ($this->hasNationalPrefixFormattingRule()) {
			$output['nationalPrefixFormattingRule'] = $this->getNationalPrefixFormattingRule();
		}

		if ($this->hasDomesticCarrierCodeFormattingRule()) {
			$output['domesticCarrierCodeFormattingRule'] = $this->getDomesticCarrierCodeFormattingRule();
		}

		/*
		  objectOutput.writeBoolean(nationalPrefixOptionalWhenFormatting_);
		 */
		return $output;
	}

	public function fromArray(array $input) {
		$this->setPattern($input['pattern']);
		$this->setFormat($input['format']);
		foreach ($input['leadingDigitsPatterns'] as $leadingDigitsPattern) {
			$this->addLeadingDigitsPattern($leadingDigitsPattern);
		}

		if (isset($input['nationalPrefixFormattingRule'])) {
			$this->setNationalPrefixFormattingRule($input['nationalPrefixFormattingRule']);
		}
		if (isset($input['domesticCarrierCodeFormattingRule'])) {
			$this->setDomesticCarrierCodeFormattingRule($input['domesticCarrierCodeFormattingRule']);
		}
		/*
		  setNationalPrefixOptionalWhenFormatting(objectInput.readBoolean());
		 *
		 */
	}

}