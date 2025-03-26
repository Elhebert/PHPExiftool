<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpMM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ManifestReferenceFromPart extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpMM:ManifestReferenceFromPart';

    protected string $name = 'ManifestReferenceFromPart';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Manifest Reference From Part',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpMM
             * line : 292134
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::xmpMM.XMP-xmpMM:ManifestReferenceFromPart',
            'desc' => [
                'en' => 'Manifest Reference From Part',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
