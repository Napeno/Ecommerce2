<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/errors/custom_conversion_goal_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V12\Errors;

class CustomConversionGoalError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
Bgoogle/ads/googleads/v12/errors/custom_conversion_goal_error.protogoogle.ads.googleads.v12.errors"�
CustomConversionGoalErrorEnum"�
CustomConversionGoalError
UNSPECIFIED 
UNKNOWN
INVALID_CONVERSION_ACTION!
CONVERSION_ACTION_NOT_ENABLED/
+CANNOT_REMOVE_LINKED_CUSTOM_CONVERSION_GOAL
CUSTOM_GOAL_DUPLICATE_NAME$
 DUPLICATE_CONVERSION_ACTION_LISTB�
#com.google.ads.googleads.v12.errorsBCustomConversionGoalErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v12/errors;errors�GAA�Google.Ads.GoogleAds.V12.Errors�Google\\Ads\\GoogleAds\\V12\\Errors�#Google::Ads::GoogleAds::V12::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

