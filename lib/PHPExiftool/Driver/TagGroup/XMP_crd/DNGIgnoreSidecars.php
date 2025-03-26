<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crd;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DNGIgnoreSidecars extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:DNGIgnoreSidecars';

    protected string $name = 'DNGIgnoreSidecars';

    protected ?string $phpType = 'boolean';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'DNG Ignore Sidecars',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 282462
             * type : boolean
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::crd.XMP-crd:DNGIgnoreSidecars',
            'desc' => [
                'en' => 'DNG Ignore Sidecars',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
