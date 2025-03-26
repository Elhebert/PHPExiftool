<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_Device;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AppInfoVersion extends AbstractTagGroup
{
    protected string $id = 'XMP-Device:AppInfoVersion';

    protected string $name = 'AppInfoVersion';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'App Info Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::Device
             * line : 280718
             * type : string
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::Device.XMP-Device:AppInfoVersion',
            'desc' => [
                'en' => 'App Info Version',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
