<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_iptcCore;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CreatorCountry extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcCore:CreatorCountry';

    protected string $name = 'CreatorCountry';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Creator Country',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcCore
             * line : 288843
             * type : string
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::iptcCore.XMP-iptcCore:CreatorCountry',
            'desc' => [
                'en' => 'Creator Country',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
