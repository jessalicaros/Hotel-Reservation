<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Chat
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Chat\V2\Service\Channel;

use Twilio\Options;
use Twilio\Values;

abstract class MessageOptions
{
    /**
     * @param string $from The [Identity](https://www.twilio.com/docs/chat/identity) of the new message's author. The default value is `system`.
     * @param string $attributes A valid JSON string that contains application-specific data.
     * @param \DateTime $dateCreated The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was created. The default value is the current time set by the Chat service. This parameter should only be used when a Chat's history is being recreated from a backup/separate source.
     * @param \DateTime $dateUpdated The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was last updated.
     * @param string $lastUpdatedBy The [Identity](https://www.twilio.com/docs/chat/identity) of the User who last updated the Message, if applicable.
     * @param string $body The message to send to the channel. Can be an empty string or `null`, which sets the value as an empty string. You can send structured data in the body by serializing it as a string.
     * @param string $mediaSid The SID of the [Media](https://www.twilio.com/docs/chat/rest/media) to attach to the new Message.
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
     * @return CreateMessageOptions Options builder
     */
    public static function create(
        
        string $from = Values::NONE,
        string $attributes = Values::NONE,
        \DateTime $dateCreated = null,
        \DateTime $dateUpdated = null,
        string $lastUpdatedBy = Values::NONE,
        string $body = Values::NONE,
        string $mediaSid = Values::NONE,
        string $xTwilioWebhookEnabled = Values::NONE

    ): CreateMessageOptions
    {
        return new CreateMessageOptions(
            $from,
            $attributes,
            $dateCreated,
            $dateUpdated,
            $lastUpdatedBy,
            $body,
            $mediaSid,
            $xTwilioWebhookEnabled
        );
    }

    /**
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
     * @return DeleteMessageOptions Options builder
     */
    public static function delete(
        
        string $xTwilioWebhookEnabled = Values::NONE

    ): DeleteMessageOptions
    {
        return new DeleteMessageOptions(
            $xTwilioWebhookEnabled
        );
    }


    /**
     * @param string $order The sort order of the returned messages. Can be: `asc` (ascending) or `desc` (descending) with `asc` as the default.
     * @return ReadMessageOptions Options builder
     */
    public static function read(
        
        string $order = Values::NONE

    ): ReadMessageOptions
    {
        return new ReadMessageOptions(
            $order
        );
    }

    /**
     * @param string $body The message to send to the channel. Can be an empty string or `null`, which sets the value as an empty string. You can send structured data in the body by serializing it as a string.
     * @param string $attributes A valid JSON string that contains application-specific data.
     * @param \DateTime $dateCreated The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was created. The default value is the current time set by the Chat service. This parameter should only be used when a Chat's history is being recreated from a backup/separate source.
     * @param \DateTime $dateUpdated The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was last updated.
     * @param string $lastUpdatedBy The [Identity](https://www.twilio.com/docs/chat/identity) of the User who last updated the Message, if applicable.
     * @param string $from The [Identity](https://www.twilio.com/docs/chat/identity) of the message's author.
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
     * @return UpdateMessageOptions Options builder
     */
    public static function update(
        
        string $body = Values::NONE,
        string $attributes = Values::NONE,
        \DateTime $dateCreated = null,
        \DateTime $dateUpdated = null,
        string $lastUpdatedBy = Values::NONE,
        string $from = Values::NONE,
        string $xTwilioWebhookEnabled = Values::NONE

    ): UpdateMessageOptions
    {
        return new UpdateMessageOptions(
            $body,
            $attributes,
            $dateCreated,
            $dateUpdated,
            $lastUpdatedBy,
            $from,
            $xTwilioWebhookEnabled
        );
    }

}

class CreateMessageOptions extends Options
    {
    /**
     * @param string $from The [Identity](https://www.twilio.com/docs/chat/identity) of the new message's author. The default value is `system`.
     * @param string $attributes A valid JSON string that contains application-specific data.
     * @param \DateTime $dateCreated The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was created. The default value is the current time set by the Chat service. This parameter should only be used when a Chat's history is being recreated from a backup/separate source.
     * @param \DateTime $dateUpdated The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was last updated.
     * @param string $lastUpdatedBy The [Identity](https://www.twilio.com/docs/chat/identity) of the User who last updated the Message, if applicable.
     * @param string $body The message to send to the channel. Can be an empty string or `null`, which sets the value as an empty string. You can send structured data in the body by serializing it as a string.
     * @param string $mediaSid The SID of the [Media](https://www.twilio.com/docs/chat/rest/media) to attach to the new Message.
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
     */
    public function __construct(
        
        string $from = Values::NONE,
        string $attributes = Values::NONE,
        \DateTime $dateCreated = null,
        \DateTime $dateUpdated = null,
        string $lastUpdatedBy = Values::NONE,
        string $body = Values::NONE,
        string $mediaSid = Values::NONE,
        string $xTwilioWebhookEnabled = Values::NONE

    ) {
        $this->options['from'] = $from;
        $this->options['attributes'] = $attributes;
        $this->options['dateCreated'] = $dateCreated;
        $this->options['dateUpdated'] = $dateUpdated;
        $this->options['lastUpdatedBy'] = $lastUpdatedBy;
        $this->options['body'] = $body;
        $this->options['mediaSid'] = $mediaSid;
        $this->options['xTwilioWebhookEnabled'] = $xTwilioWebhookEnabled;
    }

    /**
     * The [Identity](https://www.twilio.com/docs/chat/identity) of the new message's author. The default value is `system`.
     *
     * @param string $from The [Identity](https://www.twilio.com/docs/chat/identity) of the new message's author. The default value is `system`.
     * @return $this Fluent Builder
     */
    public function setFrom(string $from): self
    {
        $this->options['from'] = $from;
        return $this;
    }

    /**
     * A valid JSON string that contains application-specific data.
     *
     * @param string $attributes A valid JSON string that contains application-specific data.
     * @return $this Fluent Builder
     */
    public function setAttributes(string $attributes): self
    {
        $this->options['attributes'] = $attributes;
        return $this;
    }

    /**
     * The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was created. The default value is the current time set by the Chat service. This parameter should only be used when a Chat's history is being recreated from a backup/separate source.
     *
     * @param \DateTime $dateCreated The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was created. The default value is the current time set by the Chat service. This parameter should only be used when a Chat's history is being recreated from a backup/separate source.
     * @return $this Fluent Builder
     */
    public function setDateCreated(\DateTime $dateCreated): self
    {
        $this->options['dateCreated'] = $dateCreated;
        return $this;
    }

    /**
     * The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was last updated.
     *
     * @param \DateTime $dateUpdated The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was last updated.
     * @return $this Fluent Builder
     */
    public function setDateUpdated(\DateTime $dateUpdated): self
    {
        $this->options['dateUpdated'] = $dateUpdated;
        return $this;
    }

    /**
     * The [Identity](https://www.twilio.com/docs/chat/identity) of the User who last updated the Message, if applicable.
     *
     * @param string $lastUpdatedBy The [Identity](https://www.twilio.com/docs/chat/identity) of the User who last updated the Message, if applicable.
     * @return $this Fluent Builder
     */
    public function setLastUpdatedBy(string $lastUpdatedBy): self
    {
        $this->options['lastUpdatedBy'] = $lastUpdatedBy;
        return $this;
    }

    /**
     * The message to send to the channel. Can be an empty string or `null`, which sets the value as an empty string. You can send structured data in the body by serializing it as a string.
     *
     * @param string $body The message to send to the channel. Can be an empty string or `null`, which sets the value as an empty string. You can send structured data in the body by serializing it as a string.
     * @return $this Fluent Builder
     */
    public function setBody(string $body): self
    {
        $this->options['body'] = $body;
        return $this;
    }

    /**
     * The SID of the [Media](https://www.twilio.com/docs/chat/rest/media) to attach to the new Message.
     *
     * @param string $mediaSid The SID of the [Media](https://www.twilio.com/docs/chat/rest/media) to attach to the new Message.
     * @return $this Fluent Builder
     */
    public function setMediaSid(string $mediaSid): self
    {
        $this->options['mediaSid'] = $mediaSid;
        return $this;
    }

    /**
     * The X-Twilio-Webhook-Enabled HTTP request header
     *
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
     * @return $this Fluent Builder
     */
    public function setXTwilioWebhookEnabled(string $xTwilioWebhookEnabled): self
    {
        $this->options['xTwilioWebhookEnabled'] = $xTwilioWebhookEnabled;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Chat.V2.CreateMessageOptions ' . $options . ']';
    }
}

class DeleteMessageOptions extends Options
    {
    /**
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
     */
    public function __construct(
        
        string $xTwilioWebhookEnabled = Values::NONE

    ) {
        $this->options['xTwilioWebhookEnabled'] = $xTwilioWebhookEnabled;
    }

    /**
     * The X-Twilio-Webhook-Enabled HTTP request header
     *
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
     * @return $this Fluent Builder
     */
    public function setXTwilioWebhookEnabled(string $xTwilioWebhookEnabled): self
    {
        $this->options['xTwilioWebhookEnabled'] = $xTwilioWebhookEnabled;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Chat.V2.DeleteMessageOptions ' . $options . ']';
    }
}


class ReadMessageOptions extends Options
    {
    /**
     * @param string $order The sort order of the returned messages. Can be: `asc` (ascending) or `desc` (descending) with `asc` as the default.
     */
    public function __construct(
        
        string $order = Values::NONE

    ) {
        $this->options['order'] = $order;
    }

    /**
     * The sort order of the returned messages. Can be: `asc` (ascending) or `desc` (descending) with `asc` as the default.
     *
     * @param string $order The sort order of the returned messages. Can be: `asc` (ascending) or `desc` (descending) with `asc` as the default.
     * @return $this Fluent Builder
     */
    public function setOrder(string $order): self
    {
        $this->options['order'] = $order;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Chat.V2.ReadMessageOptions ' . $options . ']';
    }
}

class UpdateMessageOptions extends Options
    {
    /**
     * @param string $body The message to send to the channel. Can be an empty string or `null`, which sets the value as an empty string. You can send structured data in the body by serializing it as a string.
     * @param string $attributes A valid JSON string that contains application-specific data.
     * @param \DateTime $dateCreated The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was created. The default value is the current time set by the Chat service. This parameter should only be used when a Chat's history is being recreated from a backup/separate source.
     * @param \DateTime $dateUpdated The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was last updated.
     * @param string $lastUpdatedBy The [Identity](https://www.twilio.com/docs/chat/identity) of the User who last updated the Message, if applicable.
     * @param string $from The [Identity](https://www.twilio.com/docs/chat/identity) of the message's author.
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
     */
    public function __construct(
        
        string $body = Values::NONE,
        string $attributes = Values::NONE,
        \DateTime $dateCreated = null,
        \DateTime $dateUpdated = null,
        string $lastUpdatedBy = Values::NONE,
        string $from = Values::NONE,
        string $xTwilioWebhookEnabled = Values::NONE

    ) {
        $this->options['body'] = $body;
        $this->options['attributes'] = $attributes;
        $this->options['dateCreated'] = $dateCreated;
        $this->options['dateUpdated'] = $dateUpdated;
        $this->options['lastUpdatedBy'] = $lastUpdatedBy;
        $this->options['from'] = $from;
        $this->options['xTwilioWebhookEnabled'] = $xTwilioWebhookEnabled;
    }

    /**
     * The message to send to the channel. Can be an empty string or `null`, which sets the value as an empty string. You can send structured data in the body by serializing it as a string.
     *
     * @param string $body The message to send to the channel. Can be an empty string or `null`, which sets the value as an empty string. You can send structured data in the body by serializing it as a string.
     * @return $this Fluent Builder
     */
    public function setBody(string $body): self
    {
        $this->options['body'] = $body;
        return $this;
    }

    /**
     * A valid JSON string that contains application-specific data.
     *
     * @param string $attributes A valid JSON string that contains application-specific data.
     * @return $this Fluent Builder
     */
    public function setAttributes(string $attributes): self
    {
        $this->options['attributes'] = $attributes;
        return $this;
    }

    /**
     * The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was created. The default value is the current time set by the Chat service. This parameter should only be used when a Chat's history is being recreated from a backup/separate source.
     *
     * @param \DateTime $dateCreated The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was created. The default value is the current time set by the Chat service. This parameter should only be used when a Chat's history is being recreated from a backup/separate source.
     * @return $this Fluent Builder
     */
    public function setDateCreated(\DateTime $dateCreated): self
    {
        $this->options['dateCreated'] = $dateCreated;
        return $this;
    }

    /**
     * The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was last updated.
     *
     * @param \DateTime $dateUpdated The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was last updated.
     * @return $this Fluent Builder
     */
    public function setDateUpdated(\DateTime $dateUpdated): self
    {
        $this->options['dateUpdated'] = $dateUpdated;
        return $this;
    }

    /**
     * The [Identity](https://www.twilio.com/docs/chat/identity) of the User who last updated the Message, if applicable.
     *
     * @param string $lastUpdatedBy The [Identity](https://www.twilio.com/docs/chat/identity) of the User who last updated the Message, if applicable.
     * @return $this Fluent Builder
     */
    public function setLastUpdatedBy(string $lastUpdatedBy): self
    {
        $this->options['lastUpdatedBy'] = $lastUpdatedBy;
        return $this;
    }

    /**
     * The [Identity](https://www.twilio.com/docs/chat/identity) of the message's author.
     *
     * @param string $from The [Identity](https://www.twilio.com/docs/chat/identity) of the message's author.
     * @return $this Fluent Builder
     */
    public function setFrom(string $from): self
    {
        $this->options['from'] = $from;
        return $this;
    }

    /**
     * The X-Twilio-Webhook-Enabled HTTP request header
     *
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
     * @return $this Fluent Builder
     */
    public function setXTwilioWebhookEnabled(string $xTwilioWebhookEnabled): self
    {
        $this->options['xTwilioWebhookEnabled'] = $xTwilioWebhookEnabled;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Chat.V2.UpdateMessageOptions ' . $options . ']';
    }
}

