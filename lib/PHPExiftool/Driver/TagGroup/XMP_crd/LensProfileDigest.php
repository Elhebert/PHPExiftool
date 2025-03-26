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
class LensProfileDigest extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:LensProfileDigest';

    protected string $name = 'LensProfileDigest';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Lens Profile Digest',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 283002
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::crd.XMP-crd:LensProfileDigest',
            'desc' => [
                'en' => 'Lens Profile Digest',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
