<?php

declare(strict_types=1);
/**
 * This file is part of Maliboot.
 *
 * @link     https://github.com/maliboot
 * @document https://github.com/maliboot
 */

namespace Uss\Message\Client\ViewObject;

use MaliBoot\Dto\Annotation\ViewObject;

/**
 * MessageVO.
 */
#[ViewObject(name: 'Message')]
class MessageVO
{
    private int $id;

    /**
     * 模板id.
     */
    private int $tplId;

    /**
     * 模板分组id.
     */
    private int $tplGroupId;

    /**
     * 类型 0邮件 1阿里云短信  2App推送  4websocket 8钉钉群.
     */
    private int $type;

    /**
     * 标题.
     */
    private string $title;

    /**
     * 内容.
     */
    private string $content;

    /**
     * 内容类型 0text 1html 2markdown.
     */
    private int $contentType;

    /**
     * App推送-跳转页面链接.
     */
    private string $appLink;

    /**
     * 邮件附件.
     */
    private string $mailFiles;

    /**
     * 发送人标识，如邮箱，手机号，机器人唯一标识.
     */
    private string $from;

    /**
     * 发送人名称.
     */
    private string $fromName;

    /**
     * 收信人标识，如邮箱，手机号。一般情况为1个。群发时为多个.
     */
    private string $to;

    /**
     * 计划发送时间.
     */
    private string $postPlanTime;

    /**
     * 实际发送时间.
     */
    private string $postTime;

    /**
     * 发送状态：0待发送 1已发送 2发送失败.
     */
    private int $postState;

    /**
     * 阅读时间.
     */
    private string $readTime;

    /**
     * 请求（客户端）序列号（如回溯日志）。同批次号，一组消息模板发一次消息为一个批次.
     */
    private string $requestId;

    /**
     * 请求来源（客户端），如项目（模块）名称，业务关键词等….
     */
    private string $requestSource;

    /**
     * 扩展字段-业务id，如订单id、商品id，上（下）游客户id，销售库存id、账单id、审批id等…..
     */
    private int $bizId;

    /**
     * 扩展字段-业务编号，如验证码、订单号、库存编号、还款编号、审批编号等…..
     */
    private string $bizNo;

    /**
     * 扩展字段-业务类型，如验证码类型、订单类型、仓库类型、还款类型、审批类型等….
     */
    private string $bizType;

    /**
     * 扩展字段-业务其它内容.
     */
    private string $bizExt;

    /**
     * 扩展字段-业务回调地址。当消息发送完成（成功OR失败）时触发，回调参数为本表所有字段.
     */
    private string $bizCallbackUrl;

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
