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
class Copyright extends AbstractTagGroup
{
    protected string $id = 'XMP-pdf:Copyright';

    protected string $name = 'Copyright';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::pdf
             * line : 409943
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::pdf.XMP-pdf:Copyright',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
