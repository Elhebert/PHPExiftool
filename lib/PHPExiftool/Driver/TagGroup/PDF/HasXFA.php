<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PDF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HasXFA extends AbstractTagGroup
{
    protected string $id = 'PDF:HasXFA';

    protected string $name = 'HasXFA';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Has XFA',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PDF::AcroForm
             * line : 182563
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PDF::AcroForm.PDF:HasXFA',
            'desc' => [
                'en' => 'Has XFA',
            ],
        ],
    ];

    protected int $count = 0;
}
