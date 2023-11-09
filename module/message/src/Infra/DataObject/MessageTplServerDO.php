<?php

declare(strict_types=1);
/**
 * This file is part of Maliboot.
 *
 * @link     https://github.com/maliboot
 * @document https://github.com/maliboot
 */

namespace Uss\Message\Infra\DataObject;

use MaliBoot\Cola\Annotation\Database;

/**
 * 消息模板-服务配置，如机器人、邮件发件人等….
 */
#[Database(softDeletes: true)]
class MessageTplServerDO
{
    private int $id;

    /**
     * 唯一识别符（不可重复）.
     */
    private string $uniqid;

    /**
     * 类型 0邮件 1阿里云短信  2App推送  4websocket 8钉钉群.
     */
    private int $type;

    /**
     * 名称.
     */
    private string $name;

    /**
     * 描述.
     */
    private string $description;

    /**
     * 钉钉推送地址.
     */
    private string $ddWebhook;

    /**
     * 钉钉密钥.
     */
    private string $ddSecret;

    /**
     * 邮件DSN，格式如smtp://user:pass@smtp.example.com:port.
     */
    private string $mailDsn;

    /**
     * 邮件地址.
     */
    private string $mailAddress;

    /**
     * 通用keyId.
     */
    private string $appKey;

    /**
     * 通用keySecret.
     */
    private string $appSecret;

    /**
     * 创建人id.
     */
    private int $createdId;

    /**
     * 创建人名称.
     */
    private string $createdName;

    /**
     * 更新人id.
     */
    private int $updatedId;

    /**
     * 更新人名称.
     */
    private string $updatedName;

    /**
     * 创建时间.
     */
    private string $createdAt;

    /**
     * 更新时间.
     */
    private string $updatedAt;

    /**
     * 删除时间.
     */
    private string $deletedAt;
}
