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
class NegativeCacheMaximumSize extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:NegativeCacheMaximumSize';

    protected string $name = 'NegativeCacheMaximumSize';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Negative Cache Maximum Size',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 283592
             * type : real
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::crd.XMP-crd:NegativeCacheMaximumSize',
            'desc' => [
                'en' => 'Negative Cache Maximum Size',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
