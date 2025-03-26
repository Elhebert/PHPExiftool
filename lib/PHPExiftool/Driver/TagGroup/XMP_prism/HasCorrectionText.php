<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_prism;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HasCorrectionText extends AbstractTagGroup
{
    protected string $id = 'XMP-prism:HasCorrectionText';

    protected string $name = 'HasCorrectionText';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Has Correction Text',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::prism
             * line : 290130
             * type : string
             * writable : true
             * count :
             * flags : avoid,flattened
             */
            'id' => 'XMP::prism.XMP-prism:HasCorrectionText',
            'desc' => [
                'en' => 'Has Correction Text',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
