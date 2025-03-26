<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RedX extends AbstractTagGroup
{
    protected string $id = 'PNG:RedX';

    protected string $name = 'RedX';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PNG::PrimaryChromaticities
             * line : 272711
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PNG::PrimaryChromaticities.PNG:RedX',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
