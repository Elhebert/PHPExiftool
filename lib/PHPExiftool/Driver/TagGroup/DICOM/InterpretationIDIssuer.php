<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DICOM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class InterpretationIDIssuer extends AbstractTagGroup
{
    protected string $id = 'DICOM:InterpretationIDIssuer';

    protected string $name = 'InterpretationIDIssuer';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Interpretation ID Issuer',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 77220
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:InterpretationIDIssuer',
            'desc' => [
                'en' => 'Interpretation ID Issuer',
            ],
        ],
    ];

    protected int $count = 0;
}
