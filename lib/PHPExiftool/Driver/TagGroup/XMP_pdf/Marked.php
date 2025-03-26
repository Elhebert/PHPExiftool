<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_pdf;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Marked extends AbstractTagGroup
{
    protected string $id = 'XMP-pdf:Marked';

    protected string $name = 'Marked';

    protected ?string $phpType = 'boolean';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Marked',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::pdf
             * line : 289693
             * type : boolean
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::pdf.XMP-pdf:Marked',
            'desc' => [
                'en' => 'Marked',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
