<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SPIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class XResolution extends AbstractTagGroup
{
    protected string $id = 'SPIFF:XResolution';

    protected string $name = 'XResolution';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : JPEG::SPIFF
             * line : 153358
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'JPEG::SPIFF.SPIFF:XResolution',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
