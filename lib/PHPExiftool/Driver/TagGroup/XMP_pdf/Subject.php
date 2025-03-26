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
class Subject extends AbstractTagGroup
{
    protected string $id = 'XMP-pdf:Subject';

    protected string $name = 'Subject';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Subject',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::pdf
             * line : 289705
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::pdf.XMP-pdf:Subject',
            'desc' => [
                'en' => 'Subject',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
